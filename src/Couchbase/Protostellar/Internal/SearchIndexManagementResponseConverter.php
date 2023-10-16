<?php

namespace Couchbase\Protostellar\Internal;

use Couchbase\Exception\InvalidArgumentException;
use Couchbase\Management\SearchIndex;
use Couchbase\Protostellar\Generated\Admin\Search\V1\AnalyzeDocumentResponse;
use Couchbase\Protostellar\Generated\Admin\Search\V1\GetIndexResponse;
use Couchbase\Protostellar\Generated\Admin\Search\V1\Index;
use Couchbase\Protostellar\Generated\Admin\Search\V1\ListIndexesResponse;

class SearchIndexManagementResponseConverter
{
    /**
     * @throws InvalidArgumentException
     */
    public static function convertGetIndexResult(GetIndexResponse $response): SearchIndex
    {
        $index = self::convertIndex($response->getIndex());
        return SearchIndex::import($index);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function convertGetAllIndexesResult(ListIndexesResponse $response): array
    {
        $indexes = [];
        foreach ($response->getIndexes() as $index) {
            $indexes[] = SearchIndex::import(self::convertIndex($index));
        }
        return $indexes;
    }

    public static function convertAnalyzeDocumentResult(AnalyzeDocumentResponse $response): array
    {
        return json_decode($response->getAnalyzed(), true);
    }

    /**
     * @throws InvalidArgumentException
     */
    private static function convertIndex(Index $index): array
    {
        if (!$index->hasSourceName()) {
            throw new InvalidArgumentException("getIndex did not return a sourceName");
        }

        $finalIndex = [];

        $finalIndex["name"] = $index->getName();
        $finalIndex["source_name"] = $index->getSourceName();
        $finalIndex["uuid"] = $index->getUuid();
        $finalIndex["type"] = $index->getType();
        $finalIndex["params_json"] = SharedUtils::toAssociativeArray($index->getParams());
        $finalIndex["plan_params_json"] = SharedUtils::toAssociativeArray($index->getPlanParams());
        $finalIndex["source_params_json"] = SharedUtils::toAssociativeArray($index->getSourceParams());
        if ($index->hasSourceType()) {
            $finalIndex["source_type"] = $index->getSourceType();
        }
        if ($index->hasSourceUuid()) {
            $finalIndex["source_uuid"] = $index->getSourceUuid();
        }
        return $finalIndex;
    }
}
